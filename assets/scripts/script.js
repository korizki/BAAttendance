function showEditDate(){
  const editPanel = document.querySelector(".s_date_info");
  if (editPanel.style.height == "170px"){
    editPanel.style.height = "70px";
  } else {
    editPanel.style.height = "170px";
  }
}
// Copy nilai
const btnDetail2 = document.getElementById('btndetail2');
btnDetail2.addEventListener('click',function(){
  const btn = document.getElementById('submit2');
  btn.click();
})

const btnDetail3 = document.getElementById('btndetail3');
btnDetail3.addEventListener('click',function(){
  const btn3 = document.getElementById('submit3');
  btn3.click();
})

