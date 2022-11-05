let btn=document.querySelector("#btn");
let sidebar=document.querySelector(".sidebar");
let searchbtn=document.querySelector(".bx-search");

btn.onclick = function(){
  sidebar.classList.toggle("active");
}
btn.onclick = function(){
  btn.classList.toggle("active");
}
btn.onclick = function(){
  searchbtn.classList.toggle("active");
}