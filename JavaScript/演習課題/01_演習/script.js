document.write("問1" + "<br>");
for(var no1=1; no1<=5; no1++){
    document.write("★");
}
document.write("<br><br>");



document.write("問2" + "<br>");
for(var line = 0; line < 2; line++){
//for(var no1=1; no1<=2; no1++){
    for(var no2=1; no2<=3; no2++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問3" + "<br>");
for(var no1=1; no1<=2; no1++){
    for(var no2=1; no2<=5; no2++){
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問4" + "<br>");
for(var no1=1; no1<=4; no1++){
    for(var no2=1; no2<=5; no2++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問5" + "<br>");
for(var no1=1; no1<=4; no1++){
    for(var no2=1; no2<=3; no2++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問6" + "<br>");
for(var no1=1; no1<=3; no1++){
    for(var no2=1; no2<=3; no2++){
        if(no2 % 2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問7" + "<br>");
for(var no1=1; no1<=4; no1++){
    for(var no2=1; no2<=5; no2++){
        if(no2 % 3!=0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");



document.write("問8" + "<br>");
for(var no1=1; no1<=5; no1++){
    for(var no2=1; no2<=no1; no2++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");