/**
 * Created by Ivan on 31.05.16.
 */

function check1(oForm) {
    if (document.getElementById('rbtn1').checked == true){
        document.getElementById('info1').style.display='block';
        document.getElementById('info2').style.display= 'none';
        document.getElementById('rbtn2').checked = 0;
        document.getElementById('rbtn2').checked = enabled();
    }
    else if (document.getElementById('rbtn2').checked == true) {
        document.getElementById('info2').style.display='block';
        document.getElementById('info1').style.display='none';

    }
}

