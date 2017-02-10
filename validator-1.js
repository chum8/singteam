// JavaScript Document

function validate(the_form, form){

	var fail = ""
	if (the_form == "0"){ //validate home page
		fail += validatefield(form.first_name.value, "Please enter your first name and try again.  =)\n")
		fail += validateselected(form.city.value, 0, "Please select a city near you and try again.  =)\n")

	}
	
	if (the_form == "1"){ //validate audition page
		
		fail += validateselected(form.county.value, 0, "Please select your county and try again. =)\n")
		fail += validatefield(form["shtexti[]"][0].value, "Please enter your first name and try again. =)\n")
		fail += validatefield(form["shtexti[]"][1].value, "Please enter your last name and try again. =)\n")
		//fail += validateselected((form["shdobi[]"][0].value == 0) || (form["shdobi[]"][1].value == 0) || (form["shdobi[]"][2].value == 0), true, "Please select your date of birth and try again. =)\n")
		fail += validateselected(form["shgenderi[]"].value == 0, true, "Please select your gender and try again. =)\n")
		fail += validatefield(form["shtexti[]"][2].value, "Please enter your phone number and try again. =)\n")
		fail += validatefield(form["shtexti[]"][3].value, "Please enter your e-mail address and try again. =)\n")
		//fail += validateselected(form["selecti[]"][0].value == 0, true, "Please select a preferred audition date and try again. =)\n")
		//fail += validateselected(form["selecti[]"][1].value == 0, true, "Please select a preferred audition time and try again.  =)\n")
		fail += validatefield(form["persontexti[]"][12].value, "Please enter your street and try again. =)\n")
		fail += validatefield(form["persontexti[]"][13].value, "Please enter your city and try again. =)\n")
		fail += validatefield(form["persontexti[]"][14].value, "Please enter your state and try again. =)\n")
		fail += validatefield(form["persontexti[]"][15].value, "Please enter your zip code and try again. =)\n")
		//fail += validateselected(form["marketselecti[]"].value != 0, false, "Please tell us how you heard about us and try again. =)\n")
		
		var minor = (form["shdobi[]"][2].value > 3) || ((form["shdobi[]"][2].value == 3) && (form["shdobi[]"][0].value > 8)) //pull values off the form to see if student is a minor [4]8 = 1994,  [2]8 = August

		if (minor) 	fail += validatefield(form["markettexti[]"][5].value, "Please enter a parent or guardian name and try again. =)\n")
	}
	
	if (the_form == "2"){  //validate city request page
		var all_fields = true
		for (i=0; i <= form["texti[]"].length - 1; i++) {
			if (form["texti[]"][i].value == "") {all_fields = false}
		}
		if (!all_fields) fail += "Please fill out this entire form and try again."
	}
	
	if (the_form == "3"){ //validate audition page

		fail += validatefield(form["texti[]"][8].value, "Please enter the name of your venue and try again.\n")
		fail += validatefield(form["texti[]"][10].value, "Please enter your full name and try again.\n")
		fail += validatefield(form["texti[]"][11].value, "Please enter your phone # and try again.\n")
		fail += validatefield(form["texti[]"][13].value, "Please enter your e-mail and try again.\n")
		fail += validatefield(form["texti[]"][16].value, "Please enter the venue street address and try again.\n")
		fail += validatefield(form["texti[]"][17].value, "Please enter the venue city and try again.\n")
		fail += validatefield(form["texti[]"][18].value, "Please enter the venue state and try again.\n")
		fail += validatefield(form["texti[]"][19].value, "Please enter the venue ZIP code and try again.\n")
		fail += validatefield(form["texti[]"][30].value, "Please enter the room capacity for room 1 and try again.\n")
		fail += validatefield(form["texti[]"][31].value, "Please enter the keyboard or piano information for room 1 and try again.\n")
	}
	
	if (the_form == "4"){  //validate business partner page
		var all_fields = true
		for (i=0; i <= form["texti[]"].length - 1; i++) {
			if (form["texti[]"][i].value == "") {all_fields = false}
		}
		if (!all_fields) fail += "Please fill out each field and try again."
	}
	if (the_form == "5"){ //validate the shorter audition form
		fail += validatefield(form["texti[]"][0].value, "Please enter your name and try again. =)\n")
		fail += validatefield(form["texti[]"][1].value, "Please enter your city and try again. =)\n")
		fail += validateselected(form["selecti[]"].value == 0, true, "Please select your age range and try again. =)\n")
		fail += validateselected(form["genderi[]"].value == 0, true, "Please select your gender and try again. =)\n")
		fail += validatefield(form["texti[]"][2].value, "Please enter at least one contact phone # or e-mail address and try again. =)\n")


	}
	if (the_form == "6"){
		
		fail += validatefield(form["texti[]"][0].value, "Please enter your name and try again. =)\n")
		fail += validatefield(form["texti[]"][1].value, "Please enter an e-mail address or phone # and try again. =)\n")
	}
	/*	if ((form.student_first_name_2.value == "") && (form.student_last_name_2.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_2.value, "2")
			fail += validatestudent_last_name(form.student_last_name_2.value, "2")
			fail += validatestudent_DOB(form.student_DOB_2.value, "2")
			fail += validatestudent_sex(form.student_sex_2, "2")}


		if ((form.student_first_name_3.value == "") && (form.student_last_name_3.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_3.value, "3")
			fail += validatestudent_last_name(form.student_last_name_3.value, "3")
			fail += validatestudent_DOB(form.student_DOB_3.value, "3")
			fail += validatestudent_sex(form.student_sex_3, "3")}

		if ((form.student_first_name_4.value == "") && (form.student_last_name_4.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_4.value, "4")
			fail += validatestudent_last_name(form.student_last_name_4.value, "4")
			fail += validatestudent_DOB(form.student_DOB_4.value, "4")
			fail += validatestudent_sex(form.student_sex_4, "4")}
	
		fail += validatestudent_address(form.student_address.value)
		fail += validatestudent_city(form.student_city.value)
		fail += validatestudent_ZIP(form.student_ZIP.value)
		fail += validateprimary_phone(form.primary_phone.value)*/
		
	if (fail == "") return true
	else { alert(fail); return false; } 
}
function validatefield(field, message) {
	if (field == "") return message
	return ""
}
function validateselected(field, taboo, message) {
	if (field == taboo) return message
	return ""
}
/*

function validatestudent_first_name(field, nnum) {
		if (field == "") return "Please enter the first name for student #" + nnum + ".\n"
 		return ""
}
function validatestudent_last_name(field, nnum) {
		if (field == "") return "Please enter the last name for student #" + nnum + ".\n"
		return ""
}
function validatestudent_DOB(field, nnum) {
		if (field == "") return "Please enter a valid DOB for student #" + nnum + ".\n"
		return ""
}
function validatestudent_sex(field, nnum) {

		gender_selected = false
		for (i = 0; i <= 1; i++)		{ 	
			if (field[i].checked) {
					gender_selected = true
			}
		}
		if (gender_selected) return ""
		return "Please select student gender for student #" + nnum  + ".\n"
}
function validatestudent_address(field) {
		if (field == "") return "Please enter student address.\n"
		return ""
}
function validatestudent_city(field) {
		if (field == "") return "Please enter student city.\n"
		return "";
}
function validatestudent_ZIP(field) {
		if (field == "") return "Please enter student ZIP code.\n";
		return ""
}
function validateprimary_phone(field) {
		if (field == "") return "Please enter a contact phone number.\n"
		return ""
}*/
