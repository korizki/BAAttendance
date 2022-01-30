function showEditDate(){
  const editPanel = document.querySelector(".s_date_info");
  if (editPanel.style.height == "170px"){
    editPanel.style.height = "70px";
  } else {
    editPanel.style.height = "170px";
  }
}