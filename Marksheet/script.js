function grc(){
    
    var d = document.getElementById("sem").value;
    var st = document.getElementById("stream").value;

    document.getElementById('pp').disabled=true;
    document.getElementById('p1').disabled=true;
    document.getElementById('p3').disabled=true;
    document.getElementById('p2').disabled=true;
    document.getElementById('p4').disabled=true;

    document.getElementById('fp1').disabled=true;
    document.getElementById('fp3').disabled=true;
    document.getElementById('fp2').disabled=true;
    document.getElementById('fp4').disabled=true;

    if(d=='-' || st=='-'){
        alert("Please Select a Valid Semester or a Valid Stream");
        return false;
    }

    document.getElementById("toprint").style.display='block';
    document.getElementById("printbtn").style.display='block';


    var objDiv = document.getElementById("toprint");
    objDiv.scrollTop = objDiv.scrollHeight;

    var pass_per, pp1, pp2, pp3, pp4, upp1, upp2, upp3, upp4, upp5, upp6, name, roll, sem, stream, reg, total_obtained_marks, total_marks, percentage;
    var res_name, res_roll, res_reg, res_stream;

    var all_not_pass_flag = 0;
    pass_per = parseInt(document.getElementById('pp').value);

    pp1 = parseInt(document.getElementById('p1').value);
    pp2 = parseInt(document.getElementById('p2').value);
    pp3 = parseInt(document.getElementById('p3').value);
    pp4 = parseInt(document.getElementById('p4').value);

    upp1 = parseInt(document.getElementById('fp1').value);
    upp2 = parseInt(document.getElementById('fp2').value);
    upp3 = parseInt(document.getElementById('fp3').value);
    upp4 = parseInt(document.getElementById('fp4').value);

    name = document.getElementById("name").value;
    roll = document.getElementById("roll").value;
    sem = document.getElementById("sem").value;
    stream = document.getElementById("stream").value;
    reg = document.getElementById("reg").value;

    res_name = document.getElementById("rep_name");
    res_roll = document.getElementById("rep_roll");
    res_sem = document.getElementById("rep_sem");
    res_stream = document.getElementById("rep_deg");
    res_reg = document.getElementById("rep_reg");


    document.getElementById('op1').innerHTML=parseInt(document.getElementById('p1').value);
    document.getElementById('op2').innerHTML=parseInt(document.getElementById('p2').value);
    document.getElementById('op3').innerHTML=parseInt(document.getElementById('p3').value);
    document.getElementById('op4').innerHTML=parseInt(document.getElementById('p4').value);

    document.getElementById('ffp1').innerHTML=parseInt(document.getElementById('fp1').value);;
    document.getElementById('ffp2').innerHTML=parseInt(document.getElementById('fp2').value);;
    document.getElementById('ffp3').innerHTML=parseInt(document.getElementById('fp3').value);;
    document.getElementById('ffp4').innerHTML=parseInt(document.getElementById('fp4').value);;

    

    res_name.innerHTML = " Name   :   " + name;
    res_roll.innerHTML = " Roll   :   " + roll;
    res_stream.innerHTML = " Stream   :    "+stream;
    res_reg.innerHTML = " Registration Number   :    " + reg;
    res_sem.innerHTML = " Semester  :     " + sem;


    total_obtained_marks = (pp1+pp2+pp3+pp4);
    total_marks_ori = (upp1+upp2+upp3+upp4)

    document.getElementById('total_obatined').innerHTML=total_obtained_marks
    percentage = parseFloat((total_obtained_marks/total_marks_ori)*100);
    document.getElementById('total_percentage').innerHTML=String(percentage.toFixed(2))+ " %";


    if(pp1 < pass_per){
        document.getElementById('sp1').innerHTML="ARREAR";
        document.getElementById('sp1').style.backgroundColor = "#ff0000";
        document.getElementById('sp1').style.color = "#ffffff";
        all_not_pass_flag=all_not_pass_flag+1;
    }
    else{
        document.getElementById('sp1').innerHTML="PASS";
        document.getElementById('sp1').style.color = "#000000";
    }
    
    if(pp2 < pass_per){
        document.getElementById('sp2').innerHTML="ARREAR";
        document.getElementById('sp2').style.backgroundColor = "#ff0000";
        document.getElementById('sp2').style.color = "#ffffff";
        all_not_pass_flag=all_not_pass_flag+1;
    }
    else{
        document.getElementById('sp2').innerHTML="PASS"
        document.getElementById('sp2').style.color = "#000000";
    }
    
    if(pp3 < pass_per){
        document.getElementById('sp3').innerHTML="ARREAR";
        document.getElementById('sp3').style.backgroundColor = "#ff0000";
        document.getElementById('sp3').style.color = "#ffffff";
        all_not_pass_flag=all_not_pass_flag+1;
    }
    else{
        document.getElementById('sp3').innerHTML="PASS";
        document.getElementById('sp3').style.color = "#000000";
    }
    
    if(pp4 < pass_per){
        document.getElementById('sp4').innerHTML="ARREAR";
        document.getElementById('sp4').style.backgroundColor = "#ff0000";
        document.getElementById('sp4').style.color = "#ffffff";
        all_not_pass_flag=all_not_pass_flag+1;
    }
    else{
        document.getElementById('sp4').innerHTML="PASS";
        document.getElementById('sp4').style.color = "#000000";
    }
    
    

    if(pass_per > percentage || all_not_pass_flag>2){
        document.getElementById('overall_status').innerHTML="FAIL";
        document.getElementById('overall_status').style.backgroundColor = "#ff0000";
        document.getElementById('overall_status').style.color = "#ffffff";

        document.getElementById('grade').innerHTML="FAIL";
        document.getElementById('grade').style.backgroundColor = "#ff0000";
        document.getElementById('grade').style.color = "#ffffff";
    }
    else{
        document.getElementById('overall_status').innerHTML="PASSED";
        document.getElementById('overall_status').style.backgroundColor = "#00ff00";
        document.getElementById('overall_status').style.color = "#ffffff";
    }


    if(percentage>=90){
        document.getElementById('grade').innerHTML="A++";
    }

    if(percentage <90 && percentage>= 80){
        document.getElementById('grade').innerHTML="A+";
    }
    if(percentage <80 && percentage>= 70){
        document.getElementById('grade').innerHTML="A";
    }
    if(percentage <70 && percentage>= 60){
        document.getElementById('grade').innerHTML="B+";
    }
    if(percentage <=60 && percentage>= 50){
        document.getElementById('grade').innerHTML="B";
    }
    if(percentage <=50 && percentage>= 40){
        document.getElementById('grade').innerHTML="C";
    }
    if(percentage<pass_per || all_not_pass_flag >2){
        document.getElementById('grade').innerHTML="F";
        document.getElementById('grade').style.backgroundColor = "#ff0000";
        document.getElementById('grade').style.color = "#ffffff";
    }

}

function printMS() {
    var divContents = document.getElementById("toprint").innerHTML;
    var a = window.open('', '', 'height=500, width=500');
    a.document.write('<html><head><title>Marksheet</title>');
    a.document.write('<link rel="stylesheet" href="C:/Users/chatt/Desktop/Marksheet_update/style.css"></head>');
    a.document.write('<html>');
    a.document.write('<body > ');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
    
}

function dd(){
    var p1, p2, p3, p4, d, sp1, sp2, sp3, sp4, st;

    
    d = document.getElementById("sem").value;
    st = document.getElementById("stream").value;

    p1 = document.getElementById("paper1");
    p2 = document.getElementById("paper2");
    p3 = document.getElementById("paper3");
    p4 = document.getElementById("paper4");

    sp1 = document.getElementById("sheetP1");
    sp2 = document.getElementById("sheetP2");
    sp3 = document.getElementById("sheetP3");
    sp4 = document.getElementById("sheetP4");

    if(st=='-'){
        alert("Please Select a Stream");
    }

    if(d=='-'){
        alert("Please Select a Semester");
    }

    if(st=="cs"){

        if (d=="1")
        {
            p1.innerHTML="Advance Architecture";
            p2.innerHTML="Distributed OS";
            p3.innerHTML="Database Management System and Data Warehousing";
            p4.innerHTML="Advance Algorithms";


            sp1.innerHTML="Advance Architecture";
            sp2.innerHTML="Distributed OS";
            sp3.innerHTML="Database Management System and Data Warehousing";
            sp4.innerHTML="Advance Algorithms";

        }

        if (d=="2")
        {
            p1.innerHTML="Advance Networking";
            p2.innerHTML="Compiler Design";
            p3.innerHTML="8051 Micro Controller";
            p4.innerHTML="Internet Technologies";


            sp1.innerHTML="Advance Networking";
            sp2.innerHTML="Compiler Design";
            sp3.innerHTML="8051 Micro Controller";
            sp4.innerHTML="Internet Technologies";


        }

        if (d=="3")
        {
            p1.innerHTML="Advance Architecture";
            p2.innerHTML="Distributed OS";
            p3.innerHTML="DSE-1";
            p4.innerHTML="DSE-2";


            sp1.innerHTML="Advance Architecture";
            sp2.innerHTML="Distributed OS";
            sp3.innerHTML="DSE-1";
            sp4.innerHTML="DSE-2";

        }

        if (d=="4")
        {
            p1.innerHTML="Advance Architecture";
            p2.innerHTML="Distributed OS";
            p3.innerHTML="DSE-3";
            p4.innerHTML="DSE-4";


            sp1.innerHTML="Advance Architecture";
            sp2.innerHTML="Distributed OS";
            sp3.innerHTML="DSE-3";
            sp4.innerHTML="DSE-4";


        }
    }

    if(st=="phy"){

        if (d=="1")
        {
            p1.innerHTML="Sub_not_found";
            p2.innerHTML="Sub_not_found";
            p3.innerHTML="Sub_not_found";
            p4.innerHTML="Sub_not_found";


            sp1.innerHTML="Sub_not_found";
            sp2.innerHTML="Sub_not_found";
            sp3.innerHTML="Sub_not_found";
            sp4.innerHTML="Sub_not_found";

        }

        if (d=="2")
        {
            p1.innerHTML="Sub_not_found";
            p2.innerHTML="Sub_not_found";
            p3.innerHTML="Sub_not_found";
            p4.innerHTML="Sub_not_found";


            sp1.innerHTML="Sub_not_found";
            sp2.innerHTML="Sub_not_found";
            sp3.innerHTML="Sub_not_found";
            sp4.innerHTML="Sub_not_found";


        }

        if (d=="3")
        {
            p1.innerHTML="Sub_not_found";
            p2.innerHTML="Sub_not_found";
            p3.innerHTML="Sub_not_found";
            p4.innerHTML="Sub_not_found";


            sp1.innerHTML="Sub_not_found";
            sp2.innerHTML="Sub_not_found";
            sp3.innerHTML="Sub_not_found";
            sp4.innerHTML="Sub_not_found";


        }

        if (d=="4")
        {
            p1.innerHTML="Sub_not_found";
            p2.innerHTML="Sub_not_found";
            p3.innerHTML="Sub_not_found";
            p4.innerHTML="Sub_not_found";


            sp1.innerHTML="Sub_not_found";
            sp2.innerHTML="Sub_not_found";
            sp3.innerHTML="Sub_not_found";
            sp4.innerHTML="Sub_not_found";

        }
    }

}

function load(){
    document.getElementById("toprint").style.display='none';
    document.getElementById("printbtn").style.display='none';
}

function rst(){
    //location.reload();
    window.location.href="generator.html";
}