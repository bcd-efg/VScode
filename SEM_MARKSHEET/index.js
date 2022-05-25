var insert_table = document.getElementById('show-table');
var std_det = document.getElementById('student-det');
var result = document.getElementById('result');

var subject = document.getElementById('subject');
var sem = document.getElementById('sem');






function student_det(){
    var table = `
            <fieldset>
            <legend>Student Information</legend>
            <table id="std">
                <tr>    
                    <td>Registration No:</td>
                    <td><input type="text" id="reg_num" name="reg_num"/> 
                </tr>
                <tr>    
                    <td>Name</td>
                    <td><input type="text" id="name" name="name"/> 
                </tr>
            </table>
        </fieldset>
    `;
    std_det.innerHTML = table;

}

function show_result(){
    var table = `
    <fieldset>
        <table class="result">
            <legend>Result Summary</legend>
            <tr>    
                <td>Total Marks</td>
                <td>Marks Obtain</td>
                <td>Parcentage</td>    
                <td>Grade</td>
                <td>CGPA</td>       
            </tr>
            <tr>    
                <td><input type="text" id="total" disabled/> </td>
                <td><input type="text" id="marks_obtain" disabled/> 
                <td><input type="text" id = "par" disabled/></td>
                <td><input type="text" id="grad" disabled/></td>
                <td><input type="text" id="cgpa" disabled/></td>
            </tr>
        </table>
        <table>
            <tr class="end-button">
                <td colspan=3><input type="button" name="Print" value="Print" class="end-button" onclick="print()"></td>
                <td colspan=3><input type="button" name="PrintPreview" value="PrintPreview" class="end-button" onclick="PrintPreview()"></td>
            </tr>
    </fieldset>
    
    `;

    result.innerHTML = table;

}


function genarateTable(){
    if(subject.value === 'CS' && sem.value == "1"){
        GenerateTableSem1();
        result.innerHTML = "";
    }
    else if (subject.value === 'CS' && sem.value == "2"){
        GenerateTableSem2();
        result.innerHTML = "";
    }
    else if (subject.value === 'CS' && sem.value == "3"){
        GenerateTableSem3();
        result.innerHTML = "";
    }
    else if (subject.value === 'CS' && sem.value == "4"){
        GenerateTableSem4();
        result.innerHTML = "";
    }
}


function GenerateTableSem1(){
    console.log(subject.value, sem.value);
    student_det();
    var table;
    table = `
            <form id="sem1">
            <fieldset>
                <legend>Marksheet</legend>
            <table border="0">
            <tr>
                <th>Subject</th>
                <th>Obtain Marks</th>
                <th>Full Marks</th>
                <th>Parcentage</th>
            </tr>
                <tr>
                    <th>Design and Analusics Alogorithm:</th>
                    <td><input type="number" name="m1" id="m1" class="marks"/> 
                    <td><input type="number" name="fm1" id="fm1" class="marks" />
                    <td><input type="number" name="pr1" id="pr1" class="marks" disabled/>  
                </tr>
                <tr>
                    <th>Advanced Database System and Data warehousing:</th>
                    <td><input type="number" name="m2" id="m2" class="marks" />
                    <td><input type="number" name="fm2" id="fm2" class="marks" />
                    <td><input type="number" name="pr2" id="pr2" class="marks" disabled/>   
                </tr>
                <tr>
                    <td>Advanced Computer Architecture m :</td>
                    <td><input type="number" name="m3" id="m3" class="marks" />
                    <td><input type="number" name="fm3" id="fm3" class="marks"  />
                    <td><input type="number" name="pr3" id="pr3" class="marks" disabled/>  
                </tr>
                <tr>
                    <td>Networking:</td>
                    <td><input type="number" name="m4" id="m4" class="marks" />
                    <td><input type="number" name="fm4" id="fm4" class="marks" />
                    <td><input type="number" name="pr4" id="pr4" class="marks" disabled/>  
                </tr>
                </table>
                <table>
                <tr class="end-button">
                    <td ><input type="button" name="Calculate" value="Calculate" class="end-button" onclick="marksem1('sem1')"></td>
                    <td ><input type="reset" name="reset" value="Reset" class="end-button" onclick="rst('sem1')"></td> 
                </tr>
            </table>
        </fieldset>
        </form>

    `;

    insert_table.innerHTML = table;

}

function GenerateTableSem2(){
    console.log(subject.value, sem.value);
    student_det();
    var table;
    table = `
            <form id='sem2' >
            <fieldset>
                <legend>Marksheet</legend>
            <table border="0">
            <tr>
                <th>Subject</th>
                <th>Obtain Marks</th>
                <th>Full Marks</th>
                <th>Parcentage</th>
            </tr>
                <tr>
                    <th>Microcontroller and Embedded Systems:</th>
                    <td><input type="number" name="m1" id="m1" class="marks"/> 
                    <td><input type="number" name="fm1" id="fm1" class="marks" />
                    <td><input type="number" name="pr1" id="pr1" class="marks" disabled/>  
                </tr>
                <tr>
                    <th>Advanced Computer Networks :</th>
                    <td><input type="number" name="m2" id="m2" class="marks"/> 
                    <td><input type="number" name="fm2" id="fm2" class="marks" />
                    <td><input type="number" name="pr2" id="pr2" class="marks" disabled/>   
                </tr>
                <tr>
                    <td>Compiler Design :</td>
                    <td><input type="number" name="m3" id="m3" class="marks" />
                    <td><input type="number" name="fm3" id="fm3" class="marks"  />
                    <td><input type="number" name="pr3" id="pr3" class="marks" disabled/>  
                </tr>
                <tr>
                    <td>Internet Technology:</td>
                    <td><input type="number" name="m4" id="m4" class="marks" />
                    <td><input type="number" name="fm4" id="fm4" class="marks" />
                    <td><input type="number" name="pr4" id="pr4" class="marks" disabled/>  
                </tr>
                </table>
                <table>
                <tr class="end-button">
                    <td ><input type="button" name="Calculate" value="Calculate" class="end-button" onclick="marksem1('sem2')"></td>
                    <td ><input type="reset" name="reset" value="Reset" class="end-button" onclick="rst('sem2')"></td> 
                </tr>
            </table>
        </fieldset>
        </form>

    `;

    insert_table.innerHTML = table;

}

function GenerateTableSem3(){
    console.log(subject.value, sem.value);
    student_det();
    var table;
    table = `
            <form id="sem3" >
            <fieldset>
                <legend>Marksheet</legend>
            <table border="0">
            <tr>
                <th>Subject</th>
                <th>Obtain Marks</th>
                <th>Full Marks</th>
                <th>Parcentage</th>
            </tr>
                <tr>
                    <th>Software Engineering & Design:</th>
                    <td><input type="number" name="m1" id="m1" class="marks"/> 
                    <td><input type="number" name="fm1" id="fm1" class="marks" />
                    <td><input type="number" name="pr1" id="pr1" class="marks" disabled/>  
                </tr>
                <tr>
                    <th>Artificial Intelligence :</th>
                    <td><input type="number" name="m2" id="m2" class="marks"/>
                    <td><input type="number" name="fm2" id="fm2" class="marks" />
                    <td><input type="number" name="pr2" id="pr2" class="marks" disabled/>   
                </tr>
                <tr>
                    <td>
                    <select name="dse1" id="dse1">
                        <option value="non">DSE-1 </option>
                        <option value="1">Digital Image Processing</option>
                        <option value="2">Data Science </option>
                        <option value="3">Soft Computing </option>
                        <option value="4">Machine Learning and Data Mining </option>
                    </select>
                    </td>
                    <td><input type="number" name="m3" id="m3" class="marks" />
                    <td><input type="number" name="fm3" id="fm3" class="marks"  />
                    <td><input type="number" name="pr3" id="pr3" class="marks" disabled/>  
                </tr>
                <tr>
                    <td>
                        <select name="dse2" id="dse2">
                            <option value="non">DSE-2 </option>
                            <option value="1">Graphics and Multimedia</option>
                            <option value="2">Internet of Things</option>
                            <option value="3">Cryptography</option>
                            <option value="4">Cloud Computing</option>
                        </select>
                    </td>
                    <td><input type="number" name="m4" id="m4" class="marks" />
                    <td><input type="number" name="fm4" id="fm4" class="marks" />
                    <td><input type="number" name="pr4" id="pr4" class="marks" disabled/>  
                </tr>
                </table>
                <table>
                <tr class="end-button">
                    <td ><input type="button" name="Calculate" value="Calculate" class="end-button" onclick="marksem1('sem3')"></td>
                    <td ><input type="reset" name="reset" value="Reset" class="end-button" onclick="rst('sem3')"></td> 
                </tr>
            </table>
        </fieldset>
        </form>

    `;

    insert_table.innerHTML = table;
}

function GenerateTableSem4(){
    console.log(subject.value, sem.value);
    student_det();
    var table;
    table = `
            <form id="sem4" >
            <fieldset>
                <legend>Marksheet</legend>
            <table border="0">
            <tr>
                <th>Subject</th>
                <th>Obtain Marks</th>
                <th>Full Marks</th>
                <th>Parcentage</th>
            </tr>
                <tr>
                    <th>Network Security:</th>
                    <td><input type="number" name="m1" id="m1" class="marks"/> 
                    <td><input type="number" name="fm1" id="fm1" class="marks" />
                    <td><input type="number" name="pr1" id="pr1" class="marks" disabled/>  
                </tr>
                <tr>
                    <th>VLSI Design :</th>
                    <td><input type="number" name="m2" id="m2" class="marks" />
                    <td><input type="number" name="fm2" id="fm2" class="marks" />
                    <td><input type="number" name="pr2" id="pr2" class="marks" disabled/>   
                </tr>
                <tr>
                    <td>
                    <select name="dse3" id="dse3">
                        <option value="non">DSE-3 </option>
                        <option value="1">Digital Image Processing</option>
                        <option value="2">Data Science </option>
                        <option value="3">Soft Computing </option>
                        <option value="4">Machine Learning and Data Mining </option>
                    </select>
                    </td>
                    <td><input type="number" name="m3" id="m3" class="marks" />
                    <td><input type="number" name="fm3" id="fm3" class="marks"  />
                    <td><input type="number" name="pr3" id="pr3" class="marks" disabled/>  
                </tr>
                <tr>
                    <td>
                        <select name="dse4" id="dse4">
                            <option value="non">DSE-4</option>
                            <option value="1">Graphics and Multimedia</option>
                            <option value="2">Internet of Things</option>
                            <option value="3">Cryptography</option>
                            <option value="4">Cloud Computing</option>
                        </select>
                    </td>
                    <td><input type="number" name="m4" id="m4" class="marks" />
                    <td><input type="number" name="fm4" id="fm4" class="marks" />
                    <td><input type="number" name="pr4" id="pr4" class="marks" disabled/>  
                </tr>
                </table>
                <table>
                <tr class="end-button">
                    <td ><input type="button" name="Calculate" value="Calculate" class="end-button" onclick="marksem1('sem4')"></td>
                    <td ><input type="reset" name="reset" value="Reset" class="end-button" onclick="rst('sem4')"></td> 
                </tr>
            </table>
        </fieldset>
        </form>

    `;

    insert_table.innerHTML = table;

}

function marksem1(id){
    console.log(id);
    var m1 = document.getElementById(id).m1;
    var fm1 = document.getElementById(id).fm1;
    var pr1 = document.getElementById(id).pr1;

    var m2 = document.getElementById(id).m2;
    var fm2 = document.getElementById(id).fm2;
    var pr2 = document.getElementById(id).pr2;

    var m3 = document.getElementById(id).m3;
    var fm3 = document.getElementById(id).fm3;
    var pr3 = document.getElementById(id).pr3;

    var m4 = document.getElementById(id).m4;
    var fm4 = document.getElementById(id).fm4;
    var pr4 = document.getElementById(id).pr4;

    console.log(m1.value);

    var total = parseFloat(m1.value) + parseFloat(m2.value) + parseFloat(m3.value) + parseFloat(m4.value);
    var fm = parseFloat(fm1.value) + parseFloat(fm2.value) + parseFloat(fm3.value) + parseFloat(fm4.value);
    var par = (total / fm)*100;
    
    
    pr1.value = ((parseFloat(m1.value)/parseFloat(fm1.value)) * 100);
    pr2.value = ((parseFloat(m2.value)/parseFloat(fm2.value)) * 100);
    pr3.value = ((parseFloat(m3.value)/parseFloat(fm3.value)) * 100);
    pr4.value = ((parseFloat(m4.value)/parseFloat(fm4.value)) * 100);

    show_result();

    var t = document.getElementById("total");
    var mo = document.getElementById("marks_obtain");
    var p = document.getElementById("par");
    var g = document.getElementById("grad");
    var cgpa = document.getElementById("cgpa");

    t.value = fm;
    mo.value = total;
    p.value = par;
    cgpa.value = par/10;

    if (par > 90){
        g.value = "AA";
    }
    else if (par < 89 && par >= 70){
        g.value = "A";
    }
    else if (par < 69 && par >= 40){
        g.value = "B";
    }
    else if (par < 40){
        g.value = "F";
        g.style.backgroundColor = "#FF0000";
        g.style.color = "#FFFFFF";
    }

    if (pr1.value < 40){
        pr1.style.backgroundColor = "#FF0000";
        pr1.style.color = "#FFFFFF";
    }
    if (pr2.value < 40){
        pr2.style.backgroundColor = "#FF0000";
        pr2.style.color = "#FFFFFF";
    }
    if (pr3.value < 40){
        pr3.style.backgroundColor = "#FF0000";
        pr3.style.color = "#FFFFFF";
    }
    if (pr4.value < 40){
        pr4.style.backgroundColor = "#FF0000";
        pr4.style.color = "#FFFFFF";
    }

    m1.readOnly = true;
    m2.readOnly = true;
    m3.readOnly = true;
    m4.readOnly = true;

    fm1.readOnly = true;
    fm2.readOnly = true;
    fm3.readOnly = true;
    fm4.readOnly = true;


    
    reg.readOnly = true;
    nam.readOnly = true;

}

function rst(id){
    var pr1 = document.getElementById(id).pr1;
    var pr2 = document.getElementById(id).pr2;
    var pr3 = document.getElementById(id).pr3;
    var pr4 = document.getElementById(id).pr4;
    result.innerHTML = "";
    pr1.style.backgroundColor = "#ddabab";
    pr1.style.color = "#000000";
    pr2.style.backgroundColor = "#ddabab";
    pr2.style.color = "#000000";
    pr3.style.backgroundColor = "#ddabab";
    pr3.style.color = "#000000";
    pr4.style.backgroundColor = "#ddabab";
    pr4.style.color = "#000000";

    m1.readOnly = false;
    m2.readOnly = false;
    m3.readOnly = false;
    m4.readOnly = false;

    fm1.readOnly = false;
    fm2.readOnly = false;
    fm3.readOnly = false;
    fm4.readOnly = false;

    // reg.readOnly = false;
    // nam.readOnly = false;
}

function rstAll(id){
    var ele = document.getElementById("printarea");
    location.reload();
    // var ele1 = document.getElementById(id);
    
    ele.innerHTML = "";
    // ele1.innerHTML = "";
    // result.innerHTML = "";
}

function PrintPreview() {

    var toPrint = document.getElementById('printarea');

    
    var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');

    popupWin.document.open();

    popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" href="/mark.css"></head><body>');

    popupWin.document.write(toPrint.innerHTML);

    console.log(toPrint.innerHTML);

    popupWin.document.write('</html>');

    popupWin.document.close();

}