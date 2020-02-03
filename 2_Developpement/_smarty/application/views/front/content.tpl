{include file="./templates/header.tpl"}
{if isset($SUCCESS)}
    <div class="alert alert-success" role="alert">
        {$SUCCESS}
    </div>
{/if}

{if isset(flash_data('success'))}
    <div class="alert alert-success" role="alert">
        {flash_data('success')}
    </div>
{/if}

{if isset($ERRORS)}
    <div class="alert alert-danger" role="alert">
        {$ERRORS}
    </div>
{/if}

{if isset(flash_data('errors'))}
    <div class="alert alert-danger" role="alert">
        {flash_data('errors')}
    </div>
{/if}
{$CONTENT}
{include file="./templates/footer.tpl"}


