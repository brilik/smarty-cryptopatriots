<main>
    <div class="main-content wide-content">
        <div class="text-center set-header">
            <h1>Help Center</h1>
        </div>
        {if $questions}
            {foreach from=$questions key=k item=item}
            <div class="text-center help-hd {if ($k !== 0)}help-hd-2{/if}">
                <h3>{$item.title}</h3>
            </div>

            <div class="help-content {if ($k !== 0)}help-content-2{/if}">
                <div class="container">
                    <div class="row">
                        <ul class="help-list">
                            {foreach $item.qa as $j}
                            <li>
                                <div class="help-question">{$j.question}</div>
                                <div class="help-answer">
                                    <p>{$j.answer}</p>
                                </div>
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
            {/foreach}
        {/if}
    </div>
</main>