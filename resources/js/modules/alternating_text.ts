import TypeIt from 'typeit';

const texts = [
    'Students',
    'Developers',
    'Professionals',
    'Designers',
    'Teachers',
    'All'
];

jQuery(function() {
    let typer = new TypeIt("#alternating-text", {
        loop: true,
    });

    for (let i = 0; i < texts.length; i++) {
        if (i > 0) {
            typer = typer.delete(texts[i - 1].length).pause(1000);
        }

        typer = typer.type(texts[i]).pause(texts[i] === 'All' ? 5000 : 3000);
    }

    typer.go();
});