var btnGenerate = $("#btnGenerate");
var addItem = $("#addItem");

var variableCounter = 2;

addItem.click(() => {
    variableCounter++;

    var formAxClass = $("#formAxClass");

    var newFormItem = getVariableItem();

    formAxClass.append(newFormItem);
});

btnGenerate.click(() => {
    var classNameVal = $("#className").val();
    var classDeclaration = "[DataContractAttribute]\nclass " + classNameVal + "\n{\n";
    var parmMethod = "";
    var fullClass = "";

    for (let i = 1; i <= variableCounter; i++) {
        var variableType = $("#variableType_" + i).val();
        var variableName = $("#variableName_" + i).val();
        var variableNamePascalCase = toPascalCase(variableName);
        var variableNameCamelCase = toCamelCase(variableName);

        classDeclaration += "   "+ variableType + " " + variableNameCamelCase + ";\n";
        parmMethod += "[DataMemberAttribute('" + variableNamePascalCase + "')]\n";
        parmMethod += "public " + variableType + " parm" + variableNamePascalCase + "(" + variableType + " _" + variableNameCamelCase + " = " + variableNameCamelCase +")\n";
        parmMethod += "{\n      "+ variableNameCamelCase + " = _" + variableNameCamelCase + ";\n\n";
        parmMethod += "      return " + variableNameCamelCase + ";\n}\n\n";
    }

    classDeclaration += "}\n\n";

    fullClass = classDeclaration + parmMethod;

    var data = $("#data");
    data.text(fullClass);

});

function getVariableItem() {
    var item = "<div class='row'>";
        item += "<div class='col'>";
        item += "<label for='variableType' class='col-form-label fw-bold'>"+variableCounter+"-) Variable Type</label>";
        item += "<input type='text' class='form-control' name='variableType' id='variableType_"+variableCounter+"' placeholder='bool'></div>";
        item += "<div class='col'>";
        item += "<label for='variableName' class='col-form-label fw-bold'>"+variableCounter+"-) Variable Name</label>";
        item += "<input type='text' class='form-control' name='variableName' id='variableName_"+variableCounter+"' placeholder='IsSuccess'>";
        item += "</div></div>";

    return item;
}


function toCamelCase(val) {
    var subStrVal = val.substring(0,1);
    subStrVal = subStrVal.toLowerCase();

    val = subStrVal + val.substring(1, val.length);

    return val;
}

function toPascalCase(val) {
    var subStrVal = val.substring(0,1);
    subStrVal = subStrVal.toUpperCase();

    val = subStrVal + val.substring(1, val.length);

    return val;
}