{include file="./header.tpl"}


{if !empty($ERRORS)}
    <div class="text-center mb-5">
        <div class="alert alert-danger w-25 m-auto" role="alert">
            {$ERRORS}
        </div>
    </div>
{/if}

{if !empty(flash_data('error'))}
    <div class="text-center mb-5">
        <div class="alert alert-danger w-25 m-auto" role="alert">
            {flash_data('error')}
        </div>
    </div>
{/if}

{if !empty($SUCCESS)}
    <div class="text-center mb-5">
        <div class="alert alert-success w-25 m-auto" role="alert">
            {$SUCCESS}
        </div>
    </div>
{/if}

{if !empty(flash_data('success'))}
    <div class="text-center mb-5">
        <div class="alert alert-success w-25 m-auto" role="alert">
            {flash_data('success')}
        </div>
    </div>
{/if}

{$CONTENT}
{include file="./footer.tpl"}


