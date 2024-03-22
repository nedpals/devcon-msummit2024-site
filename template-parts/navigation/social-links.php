<?php
/** @var $args array */

$social_media_ids_to_icons = [
	'facebook' => '<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.5 10.5251C20.5 4.99123 16.02 0.5 10.5 0.5C4.98 0.5 0.5 4.99123 0.5 10.5251C0.5 15.3772 3.94 19.4173 8.5 20.3496V13.5326H6.5V10.5251H8.5V8.0188C8.5 6.08396 10.07 4.51003 12 4.51003H14.5V7.51754H12.5C11.95 7.51754 11.5 7.96867 11.5 8.52005V10.5251H14.5V13.5326H11.5V20.5C16.55 19.9987 20.5 15.7281 20.5 10.5251Z" fill="white"/>
                </svg>',
	'instagram' => '<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.3 0.5H14.7C17.9 0.5 20.5 3.1 20.5 6.3V14.7C20.5 16.2383 19.8889 17.7135 18.8012 18.8012C17.7135 19.8889 16.2383 20.5 14.7 20.5H6.3C3.1 20.5 0.5 17.9 0.5 14.7V6.3C0.5 4.76174 1.11107 3.28649 2.19878 2.19878C3.28649 1.11107 4.76174 0.5 6.3 0.5ZM6.1 2.5C5.14522 2.5 4.22955 2.87928 3.55442 3.55442C2.87928 4.22955 2.5 5.14522 2.5 6.1V14.9C2.5 16.89 4.11 18.5 6.1 18.5H14.9C15.8548 18.5 16.7705 18.1207 17.4456 17.4456C18.1207 16.7705 18.5 15.8548 18.5 14.9V6.1C18.5 4.11 16.89 2.5 14.9 2.5H6.1ZM15.75 4C16.0815 4 16.3995 4.1317 16.6339 4.36612C16.8683 4.60054 17 4.91848 17 5.25C17 5.58152 16.8683 5.89946 16.6339 6.13388C16.3995 6.3683 16.0815 6.5 15.75 6.5C15.4185 6.5 15.1005 6.3683 14.8661 6.13388C14.6317 5.89946 14.5 5.58152 14.5 5.25C14.5 4.91848 14.6317 4.60054 14.8661 4.36612C15.1005 4.1317 15.4185 4 15.75 4ZM10.5 5.5C11.8261 5.5 13.0979 6.02678 14.0355 6.96447C14.9732 7.90215 15.5 9.17392 15.5 10.5C15.5 11.8261 14.9732 13.0979 14.0355 14.0355C13.0979 14.9732 11.8261 15.5 10.5 15.5C9.17392 15.5 7.90215 14.9732 6.96447 14.0355C6.02678 13.0979 5.5 11.8261 5.5 10.5C5.5 9.17392 6.02678 7.90215 6.96447 6.96447C7.90215 6.02678 9.17392 5.5 10.5 5.5ZM10.5 7.5C9.70435 7.5 8.94129 7.81607 8.37868 8.37868C7.81607 8.94129 7.5 9.70435 7.5 10.5C7.5 11.2956 7.81607 12.0587 8.37868 12.6213C8.94129 13.1839 9.70435 13.5 10.5 13.5C11.2956 13.5 12.0587 13.1839 12.6213 12.6213C13.1839 12.0587 13.5 11.2956 13.5 10.5C13.5 9.70435 13.1839 8.94129 12.6213 8.37868C12.0587 7.81607 11.2956 7.5 10.5 7.5Z" fill="white"/>
                    </svg>',
	'twitter' => '<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.2168 5.49992C18.5751 5.79159 17.8834 5.98325 17.1668 6.07492C17.9001 5.63325 18.4668 4.93325 18.7334 4.09159C18.0418 4.50825 17.2751 4.79992 16.4668 4.96659C15.8084 4.24992 14.8834 3.83325 13.8334 3.83325C11.8751 3.83325 10.2751 5.43325 10.2751 7.40825C10.2751 7.69159 10.3084 7.96659 10.3668 8.22492C7.40011 8.07492 4.75845 6.64992 3.00011 4.49159C2.69178 5.01659 2.51678 5.63325 2.51678 6.28325C2.51678 7.52492 3.14178 8.62492 4.10845 9.24992C3.51678 9.24992 2.96678 9.08325 2.48345 8.83325V8.85825C2.48345 10.5916 3.71678 12.0416 5.35011 12.3666C4.82572 12.5101 4.27519 12.5301 3.74178 12.4249C3.96812 13.1353 4.41139 13.7569 5.00929 14.2024C5.60719 14.6478 6.32965 14.8947 7.07511 14.9083C5.81147 15.9086 4.24511 16.4493 2.63345 16.4416C2.35011 16.4416 2.06678 16.4249 1.78345 16.3916C3.36678 17.4083 5.25011 17.9999 7.26678 17.9999C13.8334 17.9999 17.4418 12.5499 17.4418 7.82492C17.4418 7.66659 17.4418 7.51659 17.4334 7.35825C18.1334 6.85825 18.7334 6.22492 19.2168 5.49992Z" fill="white"/>
                </svg>'
];
?>

<div class="flex space-x-3 items-center <?php echo $args['class'] ?>">
	<?php foreach ($social_media_ids_to_icons as $name => $svg) { ?>
		<?php $link = devcon_msummit2024_get_theme_mod($name.'_link', '') ?>

		<?php if (!empty($link)) { ?>
			<a href="<?php echo $link ?>" class="transition-colors bg-white/10 hover:bg-white/20 border-0 h-auto w-9 p-2 flex items-center justify-center rounded-full">
				<?php echo $svg ?>
			</a>
		<?php } ?>
	<?php } ?>
</div>