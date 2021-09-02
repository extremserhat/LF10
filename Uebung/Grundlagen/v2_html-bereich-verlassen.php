<html><body>
<p<?php if ($highlight): ?> class="highlight"<?php endif;?>>This is a paragraph.</p>
</body></html>

Beachten Sie, wie der PHP-Code mitten in ein HTML-Start-Tag eingebettet ist. Dem PHP-Parser ist es egal, dass er sich in der Mitte eines öffnenden Tags befindet und muss nicht geschlossen <br>
Es ist auch egal, dass nach dem schließenden ?>-Tag das Ende des öffnenden HTML-Tags ist. Wenn $highlight also wahr ist, lautet die Ausgabe:

<html><body>
<p class="highlight">This is a paragraph.</p>
</body></html>

Otherwise, it will be:

<html><body>
<p>This is a paragraph.</p>
</body></html>