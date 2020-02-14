

{include file="./header.tpl"}

<div class="container-fluid">

	<h1 class="mt-4">{$TITLE}</h1>
    {if ctrl_name() != 'dashboard'}
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
            <li><a href="{site_url('dashboard')}">Tableau de bord</a> / <a href="{base_url()}{ctrl_name()}/ListPage">{ctrl_slug()}</a> / {$TITLE}</li>
        </ol>
    {/if}

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


    {if !empty($INFOS)}
        <div class="alert alert-secondary" role="alert">
            {$INFOS}
        </div>
    {/if}

    {if !empty(flash_data('infos'))}
        <div class="alert alert-primary" role="alert">
            {flash_data('infos')}
        </div>
    {/if}


{$CONTENT}

</div>

{include file="./footer.tpl"}
