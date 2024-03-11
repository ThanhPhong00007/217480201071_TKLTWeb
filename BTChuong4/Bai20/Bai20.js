function TinhLCB() {
    LCB.value = parseFloat(HS.value) * parseFloat(LCS.value);
    PC.value = parseFloat(0.25) * parseFloat(LCB.value)
    TT.value = parseFloat(LCB.value) + parseFloat(PC.value);
}
// function TinhPC() {
//     return parseFloat(0.25) * parseFloat(LCB.value);
// }
function TinhTN() {
    var D = new Date;
    return D.getFullYear() - NVL.value;
}
// function TinhTT() {
//     return (parseFloat(LCB.value) + parseFloat(PC.value));
// }
function btnFull() {
    var D = new Date;
    TN.value = D.getFullYear() - NVL.value;
    LCB.value = parseFloat(HS.value) * parseFloat(LCS.value);
    PC.value = parseFloat(0.25) * parseFloat(LCB.value)
    TT.value = parseFloat(LCB.value) + parseFloat(PC.value);
}