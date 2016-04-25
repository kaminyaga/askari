$(document).ready(function () {
    $('#select2').select2({
        placeholder: 'Select the offender by ID number'
    });

    $('#issuing_officer').select2({
        placeholder: 'Select the Issuing Officer by police ID'
    });

    $('#evidence_picker').select2({
        placeholder: 'Pick mataching evidence Item'
    });
});