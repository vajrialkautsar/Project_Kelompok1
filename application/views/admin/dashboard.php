      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <h3>Selamat Datang di SCBD Rental Car</h3>
          <br>
          <p>Tanggal: <span id="tanggalwaktu"></span></p>
            <script>
            var tw = new Date();
            if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
            else (a=tw.getTime());
            tw.setTime(a);
            var tahun= tw.getFullYear ();
            var hari= tw.getDay ();
            var bulan= tw.getMonth ();
            var tanggal= tw.getDate ();
            var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
            var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
            document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
            </script>
            
            <ul>
                <input type="button" value="WhatsApp  :  0998735228348" class="btn btn-light">
                <input type="button" value="Instagram  :  @scbd_rentalcar" class="btn btn-light">
                <input type="button" value="Alamat  :  Sudirman Central Busines District Gedung Artha Graha, Jl. Jend. Sudirman No.Kav 52-53, RT.5/RW.3, Senayan," class="btn btn-light">
                <input type="button" value="Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190" class="btn btn-light">
            </ul>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9397.98212833525!2d106.8087715527974!3d-6.223663996242637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1505c76d775%3A0xe8503eecf84be674!2sSudirman%20Central%20Busines%20District!5e1!3m2!1sid!2sid!4v1638502837946!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              
          
        </section>
      </div>
      