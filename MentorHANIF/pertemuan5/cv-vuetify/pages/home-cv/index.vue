<template>
  <div>
    <v-container
      style="
        margin-left: 280px;
        font-family: 'Poppins', sans-serif;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 4px -4px 100px rgba(0, 0, 0, 0.1);
      "
    >
      <v-row>
        <v-col
          class="kiri"
          style="background-color: #2a78ab; color: #ffff"
          cols="3"
        >
          <v-row>
            <div
              class="profile-pict"
              style="margin-top: 50px; margin-left: 50px"
            >
              <img
                src="~/assets/image.jpeg"
                height="200px"
                style="border-radius: 100%"
              />
            </div>
          </v-row>
          <v-row>
            <div
              class="name-box"
              style="
                margin-top: 20px;
                margin-left: 50px;
                font-size: 25px;
                font-weight: 700;
              "
            >
              Delshady Rachmadina
            </div>
          </v-row>
          <v-row>
            <div class="email" style="margin-left: 50px">
              <div class="soc-text">
                <v-icon>mdi-email</v-icon>
                delshae256@gmail.com
              </div>
            </div>
          </v-row>
          <v-row>
            <div class="telp" style="margin-left: 50px">
              <div class="soc-text">
                <v-icon> mdi-phone </v-icon>
                +62-813-8527-7864
              </div>
            </div>
          </v-row>
          <v-row>
            <div
              class="skills"
              style="margin-top: 120px; margin-left: 50px; font-weight: 700"
            >
              RELEVANT SKILLS
            </div>
            <div class="skill-list" style="margin-top: 10px; margin-left: 50px">
              <ul class="skilss-ul">
                <li>HTML, CSS, Mysql, Bootstrap</li>
                <li>Beginer Designer</li>
                <li>Dapat berkonstribusi dalam Kerja Sama Tim</li>
              </ul>
            </div>
          </v-row>
        </v-col>
        <v-col class="kanan" cols="5">
          <v-row>
            <div
              class="box"
              style="
                background-color: #e0effa;
                margin-top: 30px;
                margin-left: 20px;
                padding-right: 330px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
              "
            >
              <h3>Tentang Saya</h3>
            </div>
          </v-row>
          <v-row>
            <div
              class="desc"
              style="margin-left: 35px; margin-top: 25px; margin-right: 40px"
            >
              <p>
                Saya merupakan siswi SMKN 2 Kota Bekasi di jurusan Rekayasa
                Perangkat Lunak. Saya tertarik dengan design dan dunia IT,
                dengan ketertarikan saya dengan design dan IT hal ini membuat
                saya senang untuk mempelajari hal-hal baru yang belum saya
                kuasai.
              </p>
            </div>
          </v-row>
          <v-row>
            <div
              class="box"
              style="
                background-color: #e0effa;
                margin-top: 30px;
                margin-left: 20px;
                padding-right: 330px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
              "
            >
              <h3>Data Pribadi</h3>
            </div>
          </v-row>
          <v-row>
            <div class="desc" style="margin-left: 35px; margin-top: 25px">
              <p>Nama : Delshady Rachmadina</p>
              <p>Tempat Lahir : Jakarta</p>
              <p>Tanggal Lahir : 20 Mei 2006</p>
              <p>Jenis Kelamin : Perempuan</p>
              <p>Status : Pelajar</p>
              <p>Alamat : Bekasi</p>
            </div>
          </v-row>
          <v-row>
            <div
              class="box"
              style="
                background-color: #e0effa;
                margin-top: 30px;
                margin-left: 20px;
                padding-right: 330px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
              "
            >
              <h3>Pendidikan</h3>
            </div>
          </v-row>
          <v-row>
            <div class="des" style="margin-left: 35px; margin-top: 25px">
              <ul>
                <p>SDN Baru 05 Pagi (2012 - 2018)</p>
                <p>SMPN 26 Kota Bekasi (2018 - 2021)</p>
                <p>SMKN 2 Kota Bekasi (2021 - Sekarang)</p>
              </ul>
            </div>
          </v-row>
          <v-row>
            <div
              class="box"
              style="
                background-color: #e0effa;
                margin-top: 30px;
                margin-left: 20px;
                padding-right: 330px;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
              "
            >
              <h3>Pengalaman</h3>
            </div>
          </v-row>
          <v-row>
            <div
              class="desc"
              style="margin-left: 35px; margin-bottom: 80px; margin-top: 25px"
            >
              <p>Membuat Website Sekolah (PJBL) - (2021)</p>
            </div>
          </v-row>
        </v-col>
      </v-row>

      <!-- <section class="blok-1">
        <div class="profile-pict"></div>

        
        
      </section>
      <section class="blok-2">
        <div class="about">
          <div class="group-1">
            
            
          </div>
          <div class="group-2">
            
            
          </div>
          <div class="group-3">
            
            
          </div>
          <div class="group-4">
            
            
          </div>
        </div>
      </section> -->
    </v-container>
  </div>
</template>
