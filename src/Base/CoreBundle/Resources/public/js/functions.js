$(document).ready(function(){

    // permet d'afficher les datepicker de l'interface
                $(".datepicker").datepicker({dateFormat: 'dd/mm/yy',
                                            firstDay:1
                                            }).attr("readonly","readonly");


                // permet de gérer les checkbox en cascade du menu latéral gauche (lorsqu'on
                // coche un parc, toutes les turbines sont cochées)
                $(".acidjs-css3-treeview").delegate("label input:checkbox", "change", function() {
                    var
                        checkbox = $(this),
                        nestedList = checkbox.parent().next().next(),
                        selectNestedListCheckbox = nestedList.find("label:not([for]) input:checkbox");
                 
                    if(checkbox.is(":checked")) {
                        return selectNestedListCheckbox.prop("checked", true);
                    }
                    selectNestedListCheckbox.prop("checked", false);
                });
    $('#myModal').modal('show');
});