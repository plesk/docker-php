<?php
namespace Docker\Custom;

use Symfony\Component\OptionsResolver\OptionsResolver;

class QueryParam extends OptionsResolver
{
    protected array $formParameters = [];

    protected array $headerParameters = [];

    public function setFormParameters(array $optionNames): QueryParam
    {
        foreach ($optionNames as $option) {
            $this->formParameters[$option] = true;
        }

        return $this;
    }

    public function setHeaderParameters(array $optionNames): QueryParam
    {
        foreach ($optionNames as $option) {
            $this->headerParameters[$option] = true;
        }

        return $this;
    }

    public function buildQueryString(array $options): string
    {
        $options = $this->resolve($options);

        foreach ($this->formParameters as $key => $isFormParameter) {
            if ($isFormParameter && isset($options[$key])) {
                unset($options[$key]);
            }
        }

        foreach ($this->headerParameters as $key => $isHeaderParameter) {
            if ($isHeaderParameter && isset($options[$key])) {
                unset($options[$key]);
            }
        }

        return http_build_query($options);
    }

    public function buildFormDataString(array $options): string
    {
        $options = $this->resolve($options);
        $formOptions = [];

        foreach ($this->formParameters as $key => $isFormParameter) {
            if ($isFormParameter && isset($options[$key])) {
                $formOptions[$key] = $options[$key];
            }
        }

        return http_build_query($formOptions);
    }

    public function buildHeaders(array $options): array
    {
        $options = $this->resolve($options);
        $headerOptions = [];

        foreach ($this->headerParameters as $key => $isHeaderParameter) {
            if ($isHeaderParameter && isset($options[$key])) {
                $headerOptions[$key] = $options[$key];
            }
        }

        return $headerOptions;
    }
}