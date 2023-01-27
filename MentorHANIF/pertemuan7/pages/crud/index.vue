<template>
  <div>
    <div class="header">
      <Header />
      <v-spacer></v-spacer>
    </div>
    <div class="sub-title">
      <div class="judul">
        <h1>Product Lists</h1>
      </div>
    </div>
    <div class="content">
      <v-simple-table fixed-header height="500px" data-app>
        <template v-slot:top>
          <v-dialog v-model="dialog">
            <template v-slot:activator="{ on, attrs }">
              <v-btn
                class="button-add"
                color="primary"
                dark
                v-bind="attrs"
                v-on="on"
              >
                New Item
              </v-btn>
            </template>
            <v-card>
              <v-card-title>
                <span class="text-h5">{{ formTitle }}</span>
              </v-card-title>

              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field
                        v-model="editedItem.title"
                        label="Title Product"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field
                        v-model="editedItem.price"
                        label="Product Price"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" md="4">
                      <v-text-field
                        v-model="editedItem.description"
                        label="Description Product"
                      ></v-text-field>
                    </v-col>
                  </v-row>
                </v-container>
              </v-card-text>

              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="close">
                  Cancel
                </v-btn>
                <v-btn color="blue darken-1" text @click="save"> Save </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
          <v-dialog v-model="dialogRemove" max-width="500px">
            <v-card>
              <v-card-title class="text-h5"
                >Are you sure you want to delete this item?</v-card-title
              >
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="closeRemove"
                  >Cancel</v-btn
                >
                <v-btn color="blue darken-1" text @click="removeConfirm"
                  >OK</v-btn
                >
                <v-spacer></v-spacer>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </template>
        <thead>
          <tr>
            <th class="text-left">Thumbnail</th>
            <th class="text-left">Title</th>
            <th class="text-left">Price</th>
            <th class="text-left">Description</th>
            <th class="text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in get" :key="item.id">
            <td style="width: 200px">
              <v-img :src="item.thumbnail" width="200"></v-img>
            </td>
            <td style="width: 100px">{{ item.title }}</td>
            <td style="width: 60px">${{ item.price }}</td>
            <td style="width: 500px">{{ item.description }}</td>
            <td style="width: 180px">
              <tr>
                <v-row>
                  <v-col>
                    <v-btn
                      @click.prevent="edit(item)"
                      color="primary"
                      fab
                      small
                      dark
                      ><v-icon>mdi-pencil</v-icon></v-btn
                    >
                  </v-col>
                  <v-col>
                    <v-btn
                      @click.prevent="remove(item)"
                      color="danger"
                      fab
                      small
                      dark
                      ><v-icon>mdi-delete</v-icon></v-btn
                    >
                  </v-col>
                </v-row>
              </tr>
            </td>
          </tr>
        </tbody>
      </v-simple-table>
    </div>
  </div>
</template>
<script>
export default {
  name: "IndexPage",
  data: () => ({
    dataproducts: [],
    dialog: false,
    dialogRemove: false,
    editedIndex: -1,
    editedItem: {
      //   thumbnail: "",
      title: "",
      price: 0,
      description: "",
    },
    defaultItem: {
      //   thumbnail: "",
      title: "",
      price: 0,
      description: "",
    },
  }),
  methods: {
    edit(item) {
      this.editedIndex = this.dataproducts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },
    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },
    remove(item) {
      this.editedIndex = this.dataproducts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialogRemove = true;
    },
    removeConfirm() {
      this.dataproducts.splice(this.editedIndex, 1);
      this.closeRemove();
    },
    closeRemove() {
      this.dialogRemove = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },
    save() {
      if (this.editedIndex > -1) {
        Object.assign(this.dataproducts[this.editedIndex], this.editedItem);
      } else {
        this.dataproducts.push(this.editedItem);
      }
      this.close();
    },
  },
  computed: {
    get() {
      this.dataproducts = this.$store.state.produk.product;
      return this.$store.state.produk.product;
    },
    formTitle() {
      return this.editedIndex === -1 ? "New Item" : "Edit Item";
    },
  },
  watch: {
    dialog(val) {
      val || this.close();
    },
    dialogDelete(val) {
      val || this.closeDelete();
    },
  },
  mounted() {
    this.$store.dispatch("produk/getData");
  },
};
</script>
<style>
.judul {
  margin-top: 27px;
  margin-left: 17px;
}
.button-add {
  margin-top: -108px;
  margin-left: 1170px;
}
.content {
  margin-top: 30px;
}
</style>
