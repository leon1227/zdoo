$(document).ready(function()
{
    $(document).on('click', '#leaveTable td:not(.actionTD)', function()
    {
        $(this).parent().find('.actionTD a[href*=view]:not([href*=review])').click();
    });

    $(document).on('click', '.deleteLeave', function()
    {
        if(confirm(v.lang.confirmDelete))
        {
            $(this).text(v.lang.deleting);
            $.getJSON($(this).attr('href'), function(data)
            {
                if(data.result == 'success')
                {
                    if(data.locate) return location.href = data.locate;
                    return location.reload();
                }
                else
                {
                    alert(data.message);
                    if(selecter.parents('#ajaxModal').size()) return $.reloadAjaxModal(1200);
                    return location.reload();
                }
            });
        }
        return false;
    });

    /* expand active tree. */
    $('.tree li.active .hitarea').click();
});
