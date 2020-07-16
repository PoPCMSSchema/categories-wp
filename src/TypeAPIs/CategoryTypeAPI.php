<?php

declare(strict_types=1);

namespace PoP\TagsWP\TypeAPIs;

use WP_Taxonomy;
use PoP\Tags\TypeAPIs\TagTypeAPIInterface;
use PoP\TaxonomiesWP\TypeAPIs\TaxonomyTypeAPI;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class TagTypeAPI extends TaxonomyTypeAPI implements TagTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Tag
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfTagType($object): bool
    {
        return ($object instanceof WP_Taxonomy) && $object->hierarchical == true;
    }
}
