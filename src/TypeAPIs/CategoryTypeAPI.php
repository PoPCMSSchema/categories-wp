<?php

declare(strict_types=1);

namespace PoP\CategoriesWP\TypeAPIs;

use WP_Taxonomy;
use PoP\Categories\TypeAPIs\CategoryTypeAPIInterface;
use PoP\TaxonomiesWP\TypeAPIs\TaxonomyTypeAPI;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class CategoryTypeAPI extends TaxonomyTypeAPI implements CategoryTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Category
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfCategoryType($object): bool
    {
        return ($object instanceof WP_Taxonomy) && $object->hierarchical == true;
    }
}
