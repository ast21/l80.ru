<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\Containers\LegacySection\App\Models\FAQ
 *
 * @property int $id
 * @property string $question
 * @property string|null $answer
 * @property bool $active
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection<int, FAQ> $children
 * @property-read int|null $children_count
 * @property-read FAQ|null $parent
 * @method static \Kalnoy\Nestedset\Collection<int, static> all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection<int, static> get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereActive($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereAnswer($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereQuestion($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|FAQ withoutRoot()
 * @mixin \Eloquent
 */
class FAQ extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $table = 'faqs';
    protected $fillable = ['question', 'answer', 'active'];
}
