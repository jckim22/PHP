

var Links = {
    setColor : function (color) {
        target = document.querySelector('body');
        // All = document.querySelectorAll('.saw');
        target.style.color = color;
        document.querySelector('a').style.color = color;
        // for (var i = 0; i < All.length; i++) {
        //     All[i].style.color = color;
        // }
        $('.saw').css('color',color)//이 웹페이제 있는 모든 a를 jquery가 통제한다. 그리고 그 컬러 값을 이 함수의 컬러
        //값으로 변경한다
        // $('body').css('color',color);
    }
}
var Body = {
    SetTime: function (time) {
        document.querySelector('#night-day').value = time;
        // $('#night-day').value=time;
    },
    SetBackgroundColor: (color) => {
        // target.style.backgroundColor = color;
        $('body').css('backgroundColor',color);
        
    }
}
function nightHandle() {

    // saw라는 클래스가 있는 태그들의 배열을 All변수에 담아줌

    if (document.querySelector('#night-day').value == 'night') {
        Links.setColor('white');
        Body.SetBackgroundColor('black');
        Body.SetTime('day');

    }
    else {
        Links.setColor('black');
        Body.SetBackgroundColor('white');
        Body.SetTime('night');

    }

}

// function List() {
//     var lan = ['HTML', 'CSS', 'JavaScript','PHP'];
//     var cntArr = ["index.php?id=HTML", "index.php?id=CSS", "index.php?id=JavaScript","index.php?id=PHP"];
//     var cnt = 0;
//     for (var i = 0; i < lan.length; i++) {
//         document.write('<li"><a href=' + cntArr[cnt] + '><div class="saw active">' + lan[i] + '</div></a></li>');
//         cnt++;
//     }
// }

function twak() {
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/632a84e054f06e12d895ebdf/1gdf1e3nc';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
}

function discuss() {
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://web-1-bvwnyrvwuv.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
}