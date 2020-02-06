{include file="./min-header.tpl"}

{if isset($SUCCESS)}
    <div class="text-center" >
        <div class="alert alert-success d-inline" role="alert">
            {$SUCCESS}
        </div>
    </div>
{/if}

{if isset(flash_data('success'))}
    <div class="alert alert-success text-center d-inline" role="alert">
        {flash_data('success')}
    </div>
{/if}

{if isset($ERRORS)}
    <div class="text-center" >
        <div class="alert alert-danger d-inline" role="alert">
            {$ERRORS}
        </div>
    </div>
{/if}

{if isset(flash_data('errors'))}
    <div class="alert alert-danger text-center" role="alert">
        {flash_data('errors')}
    </div>
{/if}

{$CONTENT}
{include file="./min-footer.tpl"}