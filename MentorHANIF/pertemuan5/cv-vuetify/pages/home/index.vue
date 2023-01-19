<template>
  <div>
    <div class="body">
      <section class="blok-1">
        <div class="profpict"></div>
        <div class="name-box">Delshady Rachmadina</div>
        <div class="email">
          <i class="fa-regular fa-envelope"></i>
          <div class="soc-text">delshae256@gmail.com</div>
        </div>
        <div class="telp">
          <i class="fa-regular fa-user"></i>
          <div class="soc-text">+62-813-8527-7864</div>
        </div>
        <div class="skills">
          RELEVANT SKILLS
          <ul class="skilss-ul">
            <li>HTML, CSS, Mysql, Bootstrap</li>
            <li>Beginer Designer</li>
            <li>Dapat berkonstribusi dalam Kerja Sama Tim</li>
          </ul>
        </div>
      </section>
      <section class="blok-2">
        <div class="about">
          <div class="group-1">
            <div class="box">
              <h3>Tentang Saya</h3>
            </div>
            <div class="desc">
              <p>
                Saya merupakan siswi SMKN 2 Kota Bekasi di jurusan Rekayasa
                Perangkat Lunak. Saya tertarik dengan design dan dunia IT,
                dengan ketertarikan saya dengan design dan IT hal ini membuat
                saya senang untuk mempelajari hal-hal baru yang belum saya
                kuasai.
              </p>
            </div>
          </div>
          <div class="group-2">
            <div class="box">
              <h3>Data Pribadi</h3>
            </div>
            <div class="desc">
              <p>Nama : Delshady Rachmadina</p>
              <p>Tempat Lahir : Jakarta</p>
              <p>Tanggal Lahir : 20 Mei 2006</p>
              <p>Jenis Kelamin : Perempuan</p>
              <p>Status : Pelajar</p>
              <p>Alamat : Bekasi</p>
            </div>
          </div>
          <div class="group-3">
            <div class="box">
              <h3>Pendidikan</h3>
            </div>
            <div class="des">
              <ul>
                <li>SDN Baru 05 Pagi</li>
                <li>SMPN 26 Kota Bekasi</li>
                <li>SMKN 2 Kota Bekasi</li>
              </ul>
            </div>
          </div>
          <div class="group-4">
            <div class="box">
              <h3>Pengalaman</h3>
            </div>
            <div class="desc">
              <p>Membuat Website Sekolah (PJBL) - (2021)</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap");

.body {
  background-color: #acb0b4;
}
.blok-1 {
  padding: 50px 40px;
  padding-left: 55px;
  background-color: #2a78ab;
  width: 100%;
  color: #fff;
}
.profpict {
  display: inline-flex;
  margin-bottom: 5px;
  margin-left: -15px;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background-image: url(assets/image.jpeg);
  background-position: center top;
  background-size: 100%;
}
.name-box {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  width: 100%;
  display: grid;
  margin-top: 25px;
  align-items: center;
  font-size: 24px;
}
.soc-text {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}
.skills {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
}
.skills-ul {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}
</style>
