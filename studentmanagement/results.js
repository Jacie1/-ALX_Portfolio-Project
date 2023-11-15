function results() {
    var students = {
        Alice: {
            DevOps: "95",
            GraphicDesign: "80",
            CyberSecurity: "70"
        },
        Jacie: {
            DevOps: "95",
            GraphicDesign: "80",
            CyberSecurity: "70"
        },
        Yamin: {
            DevOps: "95",
            GraphicDesign: "80",
            CyberSecurity: "70"
        }
    }
    var studentname = document.getElementById('studentname').value;
    var input = studentname.toUpperCase();
    var definition = students[input];
    var output = document.getElementById("output");

    if (definition == undefined) {
        output.innerHTML = "<hr> There is no information about this student <hr>";
    } else {
        output.innerHTML = "<hr> DevOps score is $(definition.DevOps). <hr> GraphicDesign score is $(definition.GraphicDesign). <hr> CyberSecurity score is $(definition.CyberSecurity). <hr>"
    };
};