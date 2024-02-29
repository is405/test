document.write("問1" + "<br>");
function area(radius){
    return radius*radius*3.14 + " cm^2" + "<br>";
}

document.write(area(5));
document.write(area(7));
document.write(area(10));
document.write("<br><br>");

document.write("問2" + "<br>");
function money(adult,children){
    return "グループの合計金額は" + (adult*500 + children*200) + "円です" + "<br>";
}

document.write("A"+money(2,4));
document.write("B"+money(1,5));
document.write("C"+money(3,7));