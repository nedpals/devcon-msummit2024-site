import TypeIt from 'typeit';

declare const window: {
    alternatingTexts: string[];
} & Window;

const texts = window.alternatingTexts ?? [];

jQuery(function() {
    const container = document.getElementById("alternating-text");
    if (!container) {
        return;
    }

    let typer = new TypeIt(container, { loop: true });

    for (let i = 0; i < texts.length; i++) {
        if (i > 0) {
            typer = typer.delete(texts[i - 1].length).pause(1000);
        }

        typer = typer.type(texts[i]).pause(i === texts.length - 1 ? 5000 : 3000);
    }

    typer.go();
});