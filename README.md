# labif

perihal login saya kembalikan ke awal lagi.
soalnya gini

yang masuk sistem tuh ada empat kategori pengguna
- Admin atau teknisi
- dosen
- mahasiswa
- guest (tamu) #tanpaLogin

kalo ngecek ke empat kategori diatas pake username bakal susah ngidentifikasi, jadi saya tambahin season 'kategori' selain  'username'

-------------------------------------------------------------------------------

di login_proses, sebelum ngambil query kan kita harus tau dulu yang login mahasiswa atau dosen, diliatnya dari jumlah digit ID/USERNAME yang diinput, kalo 4 digit berarti dosen, kalo 9 berarti mahasiswa. jadi sebelum ngambil query, filter dulu pake if.
