<?php namespace Marcelgwerder\ApiHandler;

class CountMetaProvider extends MetaProvider
{
    /**
     * Query builder object
     *
     * @var mixed
     */
    protected $builder;

    public function __construct($title, $builder)
    {
        $this->builder = clone $builder;
        $this->title = $title;

        //Remove offset from builder because a count doesn't work in combination with an offset
        $this->builder->offset = null;

        //Remove orders from builder because they are irrelevant for counts and can cause errors with renamed columns
        $this->builder->orders = null;
    }

    /**
     * Get the meta information
     *
     * @return string
     */
    public function get()
    {
        return intval($this->builder->count());
    }
}
