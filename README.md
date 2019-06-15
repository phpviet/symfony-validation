<p align="center">
    <a href="https://github.com/symfony" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/143937" height="100px">
    </a>
    <h1 align="center">Symfony Validation</h1>
    <br>
    <p align="center">
    <a href="https://packagist.org/packages/phpviet/symfony-validation"><img src="https://img.shields.io/packagist/v/phpviet/symfony-validation.svg?style=flat-square" alt="Latest version"></a>
    <a href="https://travis-ci.org/phpviet/symfony-validation"><img src="https://img.shields.io/travis/phpviet/symfony-validation/master.svg?style=flat-square" alt="Build status"></a>
    <a href="https://scrutinizer-ci.com/g/phpviet/symfony-validation"><img src="https://img.shields.io/scrutinizer/g/phpviet/symfony-validation.svg?style=flat-square" alt="Quantity score"></a>
    <a href="https://styleci.io/repos/188066562"><img src="https://styleci.io/repos/188066562/shield?branch=master" alt="StyleCI"></a>
    <a href="https://packagist.org/packages/phpviet/symfony-validation"><img src="https://img.shields.io/packagist/dt/phpviet/symfony-validation.svg?style=flat-square" alt="Total download"></a>
    <a href="https://packagist.org/packages/phpviet/symfony-validation"><img src="https://img.shields.io/packagist/l/phpviet/symfony-validation.svg?style=flat-square" alt="License"></a>
    </p>
</p>

## Thông tin

Symfony validation hổ trợ kiểm tra các kiểu dữ liệu đặc thù trong nước ta.

## Cài đặt

+ Cài đặt Symfony Validation thông qua [Composer](https://getcomposer.org):

```bash
composer require phpviet/symfony-validation
```

+ Tiếp đến hãy khai báo bundle tại `config/bundles.php`:

```php
// config/bundles.php

return [
    .....
    PHPViet\Symfony\Validation\Bundle::class => ['all' => true]
];

```

## Cách sử dụng

### Các kiểu dữ liệu được hổ trợ kiểm tra hiện tại

- [`Số điện thoại di động`](#Số-điện-thoại-di-động)
- [`Số điện thoại bàn`](#Số-điện-thoại-bàn)
- [`Thẻ căn cước / chứng minh thư`](#Thẻ-căn-cước-/-chứng-minh-thư)
- [`Địa chỉ IP`](#Địa-chỉ-IP)

### Số điện thoại di động

```php
    use PHPViet\Symfony\Validation\Constraints\MobileVN as AssertMobileVN;

    /**
     * @AssertMobileVN
     */
    private $mobileNumber;
```

### Số điện thoại bàn

```php
    use PHPViet\Symfony\Validation\Constraints\LandLineVN as AssertLandLineVN;

    /**
     * @AssertLandLineVN
     */
    private $landLineNumber;
```

### Thẻ căn cước / chứng minh thư

```php
    use PHPViet\Symfony\Validation\Constraints\IdVN as AssertIdVN;

    /**
     * @AssertIdVN
     */
    private $idVN;
```

### Địa chỉ IP

```php
    use PHPViet\Symfony\Validation\Constraints\IpVN as AssertIpVN;

    /**
     * @AssertIpVN
     */
    private $ipVN;
    
    /**
     * @AssertIpVN(version=4)
     */
    private $ipv4VN;    
    
    /**
     * @AssertIpVN(version=6)
     */
    private $ipv6VN;     
```

## Dành cho nhà phát triển

Nếu như bạn cảm thấy các kiểu kiểm tra dữ liệu bên trên vẫn chưa đủ đối với thị trường 
trong nước và bạn muốn đóng góp để phát triển chung, chúng tôi rất hoan nghênh! 
Hãy tạo các `issue` để đóng góp ý tưởng cho phiên bản kế tiếp hoặc tạo `PR` 
để đóng góp thêm các kiểu kiểm tra dữ liệu còn thiếu sót. Cảm ơn!
