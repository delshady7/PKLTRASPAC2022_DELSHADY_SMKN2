<template>
  <div class="fotofolio">
    <div class="poto">
      <v-img
        max-height="350"
        max-width="350"
        src="https://i.pinimg.com/236x/1a/d7/c2/1ad7c21f99e30496544c40692abe7671.jpg"
      ></v-img>
    </div>
    <div class="ingfo">
      <h2>halo semuanya !</h2>
      <br />
      <h4>perkenalkan saya wilma olivia yanti</h4>
      <h4>saya adalah siswi dari sekolah smkn 71 jakarta</h4>
    </div>
  </div>
</template>
<style>
html {
  background-color: slategrey;
}
.poto {
  margin-top: 50px;
  margin-left: 50px;
}
.ingfo {
  /* position: absolute; */
  top: 10%;
  left: 8%;
}
</style>
<script>
export default {
  name: "IndexPage",
};
</script>
