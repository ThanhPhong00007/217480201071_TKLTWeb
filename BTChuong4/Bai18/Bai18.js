function KiemTra() {
    if (msg1.value.length > 200) {
        alert('Bạn đã nhập tối đa số ký tự cho phép')
    }
    SoKyTu.value = msg1.value.length;
}