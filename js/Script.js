function loadDoc(url, id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById(id).innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}

function appendDoc(url, id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById(id).innerHTML = document.getElementById(id).innerHTML + xhttp.responseText;
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}

function getContent() {
	loadDoc('getnav.php', 'navContainer');
	loadDoc('getcategory1nav.php', 'category1navContainer');
	loadDoc('getcategory2nav.php', 'category2navContainer');
	loadDoc('getcategory3nav.php', 'category3navContainer');
	loadDoc('getarticle.php', 'article');
	appendDoc('getcategory1article.php', 'categoryarticle');
	appendDoc('getcategory2article.php', 'categoryarticle');
	appendDoc('getcategory3article.php', 'categoryarticle');
};