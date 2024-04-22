const waxEl = document.getElementById("wax");
const fogEl = document.getElementById("fog");
const totalEl = document.getElementById("total");
const kembalianBtn = document.getElementById("kembalian-btn");
const kembalianEl = document.getElementById("kembalian");
const pembayaranEl = document.getElementById("pembayaran");
const hargaTotalBtn = document.getElementById("btn");
const simpanBtn = document.getElementById("simpan");

console.log(totalEl.value);

if (waxEl.checked) {
  alert("s");
}

waxEl.addEventListener("input", () => {
  hargaTotalBtn.addEventListener("mousedown", () => {
    if (waxEl.checked) {
      const total = parseInt(totalEl.value) + 10000;
      totalEl.value = parseInt(total);
    } else {
      totalEl.value = parseInt(totalEl.value);
    }
  });
});

fogEl.addEventListener("input", () => {
  hargaTotalBtn.addEventListener("mousedown", () => {
    const total = parseInt(totalEl.value) + 20000;
    totalEl.value = parseInt(total);
  });
});

kembalianBtn.addEventListener("mousedown", () => {
  const kembalian = totalEl.value - pembayaranEl.value;
  kembalianEl.value = kembalian;
});

simpanBtn.addEventListener("mousedown", () => {
  alert("Transaksi berhasil kembali ke home");
  window.location = "/";
});
