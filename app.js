
  ///// styel de les proprieté
 function over()
 {
     window.Nom.style.width="180px";
     window.Nom.style.height="40px";
 }
 function out()
{
    window.Nom.style.width="170px";
     window.Nom.style.height="30px";
}
function over1()
{
    window.Prenom.style.width="180px";
    window.Prenom.style.height="40px";
}
function out1()
{
   window.Prenom.style.width="170px";
    window.Prenom.style.height="30px";
}
function over2()
{
    window.Age.style.width="180px";
    window.Age.style.height="40px";
}
function out2()
{
   window.Age.style.width="170px";
    window.Age.style.height="30px";
}
function over3()
{
    window.Specia.style.width="240px";
    window.Specia.style.height="40px";
}
function out3()
{
   window.Specia.style.width="220px";
    window.Specia.style.height="30px";
}
function over4()
{
    window.Aff.style.height="70px";
    window.Aff.style.width="240px";
}
function out4()
{
    window.Aff.style.height="60px";
    window.Aff.style.width="220px";
}
function over5()
{
    window.Ajou.style.height="70px";
    window.Ajou.style.width="240px";
}
function out5()
{
    window.Ajou.style.height="60px";
    window.Ajou.style.width="220px";
}
function over6()
{
    window.supp.style.height="70px";
    window.supp.style.width="240px";
}
function out6()
{
    window.supp.style.height="60px";
    window.supp.style.width="220px";
}
function over7()
{
    window.mod.style.height="70px";
    window.mod.style.width="240px";
}
function out7()
{
    window.mod.style.height="60px";
    window.mod.style.width="220px";
}
var rIndex,
              table=document.getElementById("table");
function select ()
{
    var rIndex,
              table=document.getElementById("table");
    for(var i =0; i < table.rows.length; i++)
    {
       
        table.rows[i].onclick = function()
        {    
            rIndex = this.rowIndex;
            document.getElementById("inputId").value = this.cells[0].innerHTML;
            document.getElementById("Nom").value = this.cells[1].innerHTML;
            document.getElementById("Prenom").value = this.cells[2].innerHTML;
            document.getElementById("Age").value = this.cells[3].innerHTML;
            document.getElementById("Specia").value = this.cells[4].innerHTML;
            
        };
    }
}
select ();