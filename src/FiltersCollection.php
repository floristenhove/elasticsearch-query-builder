<?php

namespace Spatie\ElasticsearchQueryBuilder;

use Spatie\ElasticsearchQueryBuilder\Queries\Query;

class FiltersCollection
{
    protected array $filters;

    public function add(Query $query): self
    {
        $this->filters[] = $query;

        return $this;
    }

    public function isEmpty(): bool
    {
        return empty($this->filters);
    }

    public function toArray(): array
    {
        $filters = [];

        foreach ($this->filters as $filter) {
            $filters[] = $filter->toArray();
        }

        return $filters;
    }
}
