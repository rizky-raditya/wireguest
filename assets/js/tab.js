function openLogin(a,d){var c,e,b;e=document.getElementsByClassName("tabcontent");for(c=0;c<e.length;c++){e[c].style.display="none"}b=document.getElementsByClassName("tablinks");for(c=0;c<b.length;c++){b[c].className=b[c].className.replace(" active","")}document.getElementById(d).style.display="block";a.currentTarget.className+=" active"}document.getElementById("kodevoucher").click();