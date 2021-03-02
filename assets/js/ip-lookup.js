function getIP(json) {
if (json.country && json.city) {
var div = document.getElementById('ipLookup');
div.innerHTML='<i class="fa fa-cloud" aria-hidden="true"></i> : '+json.query+'<br> <i class="fa fa-server" aria-hidden="true"></i> : '+json.isp+'<br> <i class="fa fa-flag" aria-hidden="true"></i> : '+json.country+'';
}
}

document.write('<script src="https://extreme-ip-lookup.com/json/?callback=getIP"></script>');