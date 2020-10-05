# Ekopost
API wrapper for Ekopost

## Install with composer
`composer require jongotlin/ekopost`


## Example
```php
$ekopost = new \JGI\Ekopost\Ekopost(new \GuzzleHttp\Client(), $apiKey);
$campaign = new \JGI\Ekopost\Model\Campaign();

$campaign = $ekopost->campaigns()->create($campaign);

echo $campaign->getId();

```
