<main class="container bn_content">

    <table class="table">
        <!-- Début 1er Foreach -->
        {foreach from=$presta_table key=sub_cat_name item=sub_cat_presta}

        <thead class="bn_bg-color-1 bn_color-white">
            <td>{$sub_cat_name}</td>
            <td>Durée</td>
            <td>Prix</td>
        </thead>
        <tbody>
            <!-- début 2eme Foreach -->
            {foreach from=$sub_cat_presta item=objPresta}
            <tr>
                <td>{$objPresta->getTitle()}</td>
                <td class="text-nowrap">{$objPresta->getDuration()} min</td>
                <td class="text-nowrap">{$objPresta->getPrice()} €</td>
            </tr>
            <!-- Fin 2eme Foreach -->
            {/foreach}

        </tbody>

        <!-- Fin 1er Foreach -->
        {/foreach}
    </table>
    <div class="bn_gap-25"></div>

    <a href="{site_url('prestations')}" class="btn bn_btn-green">RETOUR</a>




</main>

<div class="bn_gap-100"></div>
