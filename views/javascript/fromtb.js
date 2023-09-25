/// loading thành công 
const submitclose = document.querySelector('.icon_close input');
const colseicon = document.querySelector('.close_icon i');
const thongbao  = document.querySelector('.thongbao_header');
const khung  = document.querySelector('.fromchung');
function success(){
    khung.style.display = "none";
}
submitclose.addEventListener('click',success);
colseicon.addEventListener('click',success);

