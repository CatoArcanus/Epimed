<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Base Model extends the capabilities of the Eloquent Class
 * provided by Laravel, and all Models to be used for this Application
 * will extend this Base Model, ergo, common functionality for all
 * Models should be maintained here.
 *
 * @category   MVC
 * @package    Models
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1 (11/29/2014)
 */

//* Namespaces *//
use Illuminate\Database\Eloquent\Builder;

//////////////////
//* Base Model *//
//////////////////
abstract class BaseModel extends Eloquent implements \TraceableInterface
{
    //////////////
    //* Traits *//
    //////////////
    // All Models should be Traceable
    use Traceable;

	/**
     * Provide an attributes to object map
     *
     * @return Model
     */
    public function mapData(array $attributes)
    {
        return $this->newInstance();
    }
 
    /**
     * Create a new model instance requested by the builder.
     *
     * @param  array  $attributes
     * @return Illuminate\Database\Eloquent\Model
     */
    public function newFromBuilder($attributes = array())
    {
        $m = $this->mapData((array) $attributes)->newInstance(array(), true);
        $m->setRawAttributes((array) $attributes);
        return $m;
    }
 
    /**
     * Get a new query builder for the model's table.
     *
     * @return Reposed\Builder
     */
    public function newRawQuery()
    {
        $builder = new Builder($this->newBaseQueryBuilder());
 
        // Once we have the query builders, we will set the model instances
        // so the builder can easily access any information it may need
        // from the model while it is constructing and executing various
        // queries against it.
        $builder->setModel($this)->with($this->with);
 
        return $builder;
    }
 
   /**
     * Get a new query builder for the model.
     * set any type of scope you want on this builder in a child class, and it'll
     * keep applying the scope on any read-queries on this model
     *
     * @return Reposed\Builder
     */
    public function newQuery($excludeDeleted = true)
    {
        $builder = $this->newRawQuery();
 
        if ($excludeDeleted and $this->softDelete)
        {
            $builder->whereNull($this->getQualifiedDeletedAtColumn());
        }
 
        return $builder;
    }
 
   /**
     * Save the model to the database.
     *
     * @return bool
     */
   
    public function save(array $options = array())
    {
        $query = $this->newRawQuery();
 
        // If the "saving" event returns false we'll bail out of the save
        // and return false, indicating that the save failed.
        // This gives an opportunities to listeners to cancel save operations
        // if validations fail or whatever.
        if ($this->fireModelEvent('saving') === false)
        {
            return false;
        }
 
        // If the model already exists in the database we can just update
        // our record that is already in this database using the current IDs
        //  in this "where" clause to only update this model.
        //  Otherwise, we'll just insert them.
        if ($this->exists)
        {
            $saved = $this->performUpdate($query, $options);
        }
 
        // If the model is brand new, we'll insert it into our database
        // and set the ID attribute on the model to the value of the newly
        // inserted row's ID which is typically an auto-increment value
        // managed by the database.
        else
        {
            $saved = $this->performInsert($query, $options);
 
            $this->exists = $saved;
        }
 
        if ($saved) $this->finishSave($options);
 
        return $saved;
    }
}