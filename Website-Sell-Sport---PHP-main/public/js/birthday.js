var Ngay;
var Thang;
var Nam;
function loadYear(){
	Nam=document.getElementById("ddNam");
	Nam.length = 0;
	var iNam = 0;
	var today = new Date();
	for(iNam = 1950;iNam <= today.getFullYear();iNam++){
		var optNam=document.createElement("option");
		optNam.text = iNam;
		optNam.value = iNam;
		Nam.options.add(optNam);
	}
}
function loadMonth(){
	Thang=document.getElementById("ddThang");
	Nam.length = 0;
	var iThang = 0;
	var today = new Date();
	for(iThang = 1;iThang<=12;iThang++){
		var optThang=document.createElement("option");
		optThang.text = iThang;
		optThang.value = iThang;
		Thang.options.add(optThang);
	}
}
function loadDay()
{
Ngay = document.getElementById("ddNgay");
Ngay.length = 0;
// parseInt: chuyen kieu Thang.value tu String sang Int
var value = parseInt(Thang.value);
// Dat bien SoNgay de lam gia tri cuoi cho dong lap phat sinh ngay
var SoNgay = 0;
// Thuc hien cac dong lenh sau dua tren viec so sanh gia tri Thang
switch (value)
{
// Truong hop thang 2
case 2:
// Lay gia tri Nam dang duoc chon trong ddlNam
var gtNam = Nam.selectedIndex;
// Thuat toan tinh nam nhuan
if((gtNam%4==0) && ((gtNam%100!=0)||(gtNam%400==0)))
{
// La nam nhuan
SoNgay = 28;
}
else
{
// Khong la nam nhuan
SoNgay = 29;
}
break;
// Truong hop cac thang 1, 3, 5, 7, 8, 10, 12
case 1: case 3: case 5: case 7: case 8: case 10: case 12:
SoNgay = 31;
break;
// Truong hop cac thang 4, 6, 9, 11
case 4: case 6: case 9: case 11:
SoNgay = 30;
break;
}
var iNgay=0;
// Cho vong lap chay tu 1 den SoNgay o tren
for(iNgay=1; iNgay<=SoNgay; iNgay++)
{
var optNgay = document.createElement("option");
optNgay.text = iNgay;
optNgay.value = iNgay;
Ngay.options.add(optNgay);
}
}