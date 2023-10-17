function otherLocation(selectElement) {
    const otherLocationInput = document.getElementById("otherLocationInput");

    if(selectElement.value === "other") {
        otherLocationInput.style.display = "block";
    } else {
        otherLocationInput.style.display = "none";
        otherLocationInput.value = "";
    }
}

function otherPropertyType(selectElement) {
    const otherPropertyTypeInput = document.getElementById("otherPropTypeInput");

    if(selectElement.value === "other") {
        otherPropertyTypeInput.style.display = "block";
    } else {
        otherPropertyTypeInput.style.display = "none";
        otherPropertyTypeInput.value = "";
    }
}

function otherTechnologyType(selectElement) {
    const otherTechnologyTypeInput = document.getElementById("otherTechTypeInput");

    if(selectElement.value === "other") {
        otherTechnologyTypeInput.style.display = "block";
    } else {
        otherTechnologyTypeInput.style.display = "none";
        otherTechnologyTypeInput.value = "";
    }
}

function otherUnitProblem(selectElement) {
    const otherUnitProbleInput = document.getElementById("otherUnitProbInput");

    if(selectElement.value === "other") {
        otherUnitProbleInput.style.display = "block";
    } else {
        otherUnitProbleInput.style.display = "none";
        otherUnitProbleInput.value = "";
    }
}