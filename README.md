# Symfony UX Interactive Image

Symfony UX Interactive Image is a Symfony bundle integrating the [Interactive Image](https://interactive-image.readthedocs.io/en/latest/)
jQuery plugin in Symfony applications.
[main Symfony UX repository](https://github.com/symfony/ux)

## Installation

Install this bundle using Composer and Symfony Flex:

```sh
composer require baztianzh/ux-interactive-image
```

Install dependencies

```sh
# Install the JavaScript dependencies
yarn install --force
yarn watch
```

## Usage

### Basic usage

```sh
// ...
use BaztianZh\UX\InteractiveImage\Builder\InteractiveImageBuilderInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(InteractiveImageBuilderInterface $builder): Response
    {
        $interactiveImage = $builder->createInteractiveImage('/build/images/my-image.jpg');

        $textItem = new TextItem(200, 20,'title', 'description');
        
        $interactiveImage->addItem($textItem);

        return $this->render('home/index.html.twig', [
            'interactiveImage' => $interactiveImage,
        ]);
    }
}
```

### Render
```sh
  <div class="row">
      {{ render_interactive_image(interactiveImage) }}
  </div>
  
  # You can customize by adding class
  {{ render_interactive_image(interactiveImage, {'class': 'my-class'}) }}
```

### Options

```sh
// ...
use BaztianZh\UX\InteractiveImage\Builder\InteractiveImageBuilderInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(InteractiveImageBuilderInterface $builder): Response
    {
        $interactiveImage = $builder->createInteractiveImage('/build/images/my-image.jpg');

        $textItem = new TextItem(200, 20,'title', 'description');
        
        $interactiveImage->addItem($textItem);
        
        # Change default options
        $interactiveImage->getOptions()
            ->setDebug(true)
            ->setShareBox(true)
            ->setSocialMedia($socialMedia)
            ->setTriggerEvent(TriggerEventName::HOVER)
            ->setAllowHtml(true)
        ;

        return $this->render('home/index.html.twig', [
            'interactiveImage' => $interactiveImage,
        ]);
    }
}
```

## Documentation

For more information, check the [documentation](https://interactive-image.readthedocs.io/en/latest/index.html)