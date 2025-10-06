document
  .getElementById("formPendaftaran")
  .addEventListener("submit", function (e) {
    e.preventDefault(); // cegah reload

    alert("Pendaftaran berhasil dikirim!\nTerima kasih sudah mendaftar.");
  });
