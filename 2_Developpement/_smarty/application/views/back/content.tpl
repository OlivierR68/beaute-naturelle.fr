
{include file="./templates/header.tpl"}

<div class="container-fluid">
	<h1 class="mt-4">{$TITLE}</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active"></li>
		<li>{ctrl_name()} / {page_name()}</li>
	</ol>

	{if !empty($ERROR)}
		<div class="alert alert-danger" role="alert">
			{$ERROR}
		</div>
    {/if}

    {if !empty(flash_data('error'))}
    <div class="alert alert-danger" role="alert">
        {flash_data('error')}
    </div>
    {/if}

    {if !empty($SUCCESS)}
    <div class="alert alert-success" role="alert">
        {$SUCCESS}
    </div>
    {/if}

    {if !empty(flash_data('success'))}
		<div class="alert alert-success" role="alert">
            {flash_data('success')}
		</div>
    {/if}


{$CONTENT}

</div>

{include file="./templates/footer.tpl"}
