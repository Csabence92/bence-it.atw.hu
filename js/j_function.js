function printDiv(divID) {
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;

    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = 
      "<html><head><title></title></head><body>" + 
      divElements + "</body>";

    //Print Page
    window.print();

    //Restore orignal HTML
    document.body.innerHTML = oldPage; 
}
function download_cv(url){
    var a = document.createElement("a");
    a.href = url;
    var n = url.lastIndexOf('/');
    fileName = url.substring(n+1);
    a.download = fileName;
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
    a.remove();
}
function sendMail(from,email,msg){
  
}