<div id="restriction-overlay" {if $restriction_accepted || ($restriction_local && !$pg_restricted)} class="hidden"{/if}>
    <div id="restriction-alert">
        <p>{$OPTIONS.restricted_message}</p>
        <div class="restricted-buttons">
            <form action="" method="post">
            <button class="btn btn-primary" type="submit" value="yes" name="accept">{$OPTIONS.restricted_button_agree}</button>
            <a class="btn btn-primary" href="{$OPTIONS.restricted_exitlink}">{$OPTIONS.restricted_button_disagree}</a>
            </form>
        </div>
    </div>
</div>