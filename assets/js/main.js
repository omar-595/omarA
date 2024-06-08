function muneo(ev) {
	let bar = document.querySelector(".nav-mopail");
	let hed = document.querySelector(".header");

	bar.style.display = "block";
	hed.style.display = "none";
}

function exit(ev) {
	let bar = document.querySelector(".nav-mopail");
	let hed = document.querySelector(".header");

	bar.style.display = "none";
	hed.style.display = "flex";
}


function opin(ev) {
	var userInput = document.getElementById('pasw').value;
	var remov = document.getElementById('lp');
	var lert = document.getElementById('aler');


	let paswor = 2007;

	if (userInput == paswor) {
	remov.remove();
	document.getElementById('pasw').value = '';

	}else{
    document.getElementById('aler').innerHTML += 'Fulse Password';
	document.getElementById('pasw').value = '';

	}
}

function ler(ev) {
	!Notification && null;
	Notification.requestPermission().then(showNotification);
}

        window.URL = window.URL || window.webkitURL;
        function displayImages(event) {
            let files = event.target.files;
            let info = document.getElementById('imgt')
            info.innerHTML = ""
            for(let i = 0; i < files.length; i++) {
                let src = URL.createObjectURL(files[i])
                console.log(src)
                info.innerHTML += `<img src="${src}">`
            }
        }
// *******************************************************************
function sortLines() {
    // احصل على محتوى منطقة الإدخال
    let inputArea = document.getElementById('inputArea');
    let text = inputArea.value;

    // تقسيم النص إلى أسطر
    let lines = text.split('\n');

    // ترتيب الأسطر
    lines.sort();

    // إعادة تجميع الأسطر في نص واحد
    let sortedText = lines.join('\n');

    // تحديث محتوى منطقة الإدخال بالنص المرتب
    inputArea.value = sortedText;
}
// ***************************************
// script.js
window.addEventListener('scroll', function() {
    const header = document.getElementById('main-header');
    if (window.scrollY > 20) { // تغيير اللون عند التمرير بمقدار 50 بكسل
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});